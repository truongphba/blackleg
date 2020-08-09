<?php

namespace App\Http\Controllers\Backend;

use App\Category;
use App\Collection;
use App\Http\Controllers\Controller;
use App\Image;
use App\Product;
use App\Size;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->get('keyword');
        $category_id = $request->get('category_id');
        $start = $request->get('start');
        $end = $request->get('end');
        $categories = Category::where('status', 1)->get();
        $list = Product::orderBy('created_at', 'desc')
            ->whereHas('category', function ($query) {
                $query->where('status', 1);
            })
            ->where(function ($query) use ($keyword) {
                $query->where('name', 'like', '%' . $keyword . '%')
                    ->orWhere('colors', 'like', '%' . $keyword . '%')
                    ->orWhereHas('category', function ($query) use ($keyword) {
                        $query->where('name', 'like', '%' . $keyword . '%');
                    });
            })
            ->where(function ($query) use ($category_id) {
                if (isset($category_id) && $category_id != 0) {
                    $query->where('category_id', $category_id);
                }
            })
            ->where(function ($query) use ($start, $end) {
                if (isset($start) && isset($end)) {
                    $query->whereDate('created_at', '>=', $start)->whereDate('created_at', '<=', $end);
                }
            })
            ->paginate(10)
            ->appends($request->only('keyword'))->appends($request->only('category_id'))->appends($request->only('start'))->appends($request->only('end'));

        return view('backend.product.index')->with(['list' => $list, 'categories' => $categories, 'category_id' => $category_id, 'keyword' => $keyword, 'start' => $start, 'end' => $end]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('status', 1)->get();
        $sizes = Size::where('status', 1)->get();
        $collections = Collection::where('status', 1)->get();
        return view('backend.product.create')->with(['categories' => $categories, 'sizes' => $sizes, 'collections' => $collections]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'price' => 'required|numeric',
            'detail' => 'required',
        ]);
        DB::beginTransaction();
        try {
            $product = new Product();
            $product->name = $request->name;
            $product->category_id = $request->category_id;
            $product->price = $request->price;
            $product->colors = $request->colors;
            $product->description = $request->description;
            $product->detail = $request->detail;

            $product->save();

            $collection_input = $request->get('collection');

            if (isset($collection_input)) {
                $row_collection = [];
                foreach ($collection_input as $collection) {
                    $row_collection[] = [
                        'product_id' => $product->id,
                        'collection_id' => $collection,
                    ];
                }
                DB::table('product_collection')->insert($row_collection);
            }


            $sizes = Size::where('status', 1)->get();
            $row_size = [];
            foreach ($sizes as $size) {
                $row_size[] = [
                    'product_id' => $product->id,
                    'size_id' => $size->id,
                    'quantity' => $request->get('quantity_' . $size->id)
                ];
            }
            DB::table('product_size')->insert($row_size);

            $images = $request->get('images');
            if (isset($images) > 0) {
                $row_image = [];
                foreach ($images as $image) {
                    $row_image[] = [
                        'product_id' => $product->id,
                        'url' => $image,
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                        'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    ];
                }
                Image::insert($row_image);
            }
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            $request->session()->flash('error', 'Something wrong, please try again!');
            return redirect()->back();
        }
        return redirect()->route('backend.products.index');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        $categories = Category::where('status', 1)->get();
        $sizes = Size::where('status', 1)->get();
        $collections = Collection::where('status', 1)->get();
        $images = $product->photos;
        $product_collections = $product->collection->where('status', 1);
        $collection_ids = $product_collections->map(function ($item) {
            return $item->id;
        });
        $product_sizes = $product->size->where('status', 1);
        $product_sizes = $product_sizes->map(function ($item) {
            return [
                'size_id' => $item->pivot->size_id,
                'quantity' => $item->pivot->quantity,
            ];
        });


        return view('backend.product.detail', [
            'product' => $product,
            'categories' => $categories,
            'sizes' => $sizes,
            'collections' => $collections,
            'images' => $images,
            'collection_ids' => $collection_ids->toArray(),
            'product_sizes' => $product_sizes
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::where('status', 1)->get();
        $sizes = Size::where('status', 1)->get();
        $collections = Collection::where('status', 1)->get();
        $images = $product->photos;
        $product_collections = $product->collection->where('status', 1);
        $collection_ids = $product_collections->map(function ($item) {
            return $item->id;
        });
        $product_sizes = $product->size->where('status', 1);
        $product_sizes = $product_sizes->map(function ($item) {
            return [
                'size_id' => $item->pivot->size_id,
                'quantity' => $item->pivot->quantity,
            ];
        });


        return view('backend.product.edit', [
            'product' => $product,
            'categories' => $categories,
            'sizes' => $sizes,
            'collections' => $collections,
            'images' => $images,
            'collection_ids' => $collection_ids->toArray(),
            'product_sizes' => $product_sizes
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'price' => 'required|numeric',
            'detail' => 'required',
        ]);

        DB::beginTransaction();
        try {
            $product = Product::find($id);
            $product->name = $request->name;
            $product->category_id = $request->category_id;
            $product->price = $request->price;
            $product->colors = $request->colors;
            $product->description = $request->description;
            $product->detail = $request->detail;
            $product->save();

            $collection_input = $request->get('collection');

            if (isset($collection_input)) {
                $row_collection = [];
                foreach ($collection_input as $collection) {
                    $row_collection[] = [
                        'product_id' => $product->id,
                        'collection_id' => $collection,
                    ];
                }
                DB::table('product_collection')->truncate();
                DB::table('product_collection')->insert($row_collection);
            }


            $sizes = Size::where('status', 1)->get();
            $row_size = [];
            foreach ($sizes as $size) {
                $row_size[] = [
                    'product_id' => $product->id,
                    'size_id' => $size->id,
                    'quantity' => $request->get('quantity_' . $size->id)
                ];
            }
            DB::table('product_size')->truncate();
            DB::table('product_size')->insert($row_size);

            $images = $request->get('images');
            if (isset($images) > 0) {
                $row_image = [];
                foreach ($images as $image) {
                    $row_image[] = [
                        'product_id' => $product->id,
                        'url' => $image,
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                        'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    ];
                }
                Image::truncate();
                Image::insert($row_image);
            }
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            $request->session()->flash('error', 'Something wrong, please try again!');
            return redirect()->back();
        }
        return redirect()->route('backend.products.show', $product->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    public function deleteSelected(Request $request)
    {
        $ids = $request->get('ids');
        Product::whereIn('id', $ids)->update(['status' => 0]);
        return $ids;
    }
    public function activeSelected(Request $request)
    {
        $ids = $request->get('ids');
        Product::whereIn('id', $ids)->update(['status' => 1]);
        return $ids;
    }
    public function highlightSelected(Request $request)
    {
        $ids = $request->get('ids');
        Product::whereIn('id', $ids)->update(['highlight' => 1]);
        return $ids;
    }
    public function unhighlightSelected(Request $request)
    {
        $ids = $request->get('ids');
        Product::whereIn('id', $ids)->update(['highlight' => 0]);
        return $ids;
    }
}
