<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coin;
use App\Advs;
use App\ProductCategory;
use App\Product;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    function cambiarBarra($data) {
        return str_replace("\\", "/", $data);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $Coin = Coin::where("id",1)->first();
        
        $Slider = Advs::where('status','A')->whereRaw('LOWER(type) LIKE ?', [trim(strtolower("top")).'%'])->orderBy('order','ASC')->get();


        $Medio_Bajo = [];
        $Med = Advs::where('status','A')->whereRaw('LOWER(type) LIKE ?', [trim(strtolower("medio_bajo")).'%'])->orderBy('order','ASC')->get();
        foreach ($Med as $i => $m) {
            $m["image"] = $this->cambiarBarra($m["image"]);
            array_push($Medio_Bajo, $m);
        }
        $Medio_Bajo = json_encode($Medio_Bajo);

        $footer = [];
        $foot = Advs::where('status','A')->whereRaw('LOWER(type) LIKE ?', [trim(strtolower("footer")).'%'])->orderBy('order','ASC')->get();
        foreach ($foot as $i => $f) {
            $f["image"] = $this->cambiarBarra($f["image"]);
            array_push($footer, $f);
        }
        $footer = json_encode($footer);

        $Categories = [];
        $Cat = ProductCategory::where('status','A')->orderBy("order","asc")->take(4)->get();
        foreach ($Cat as $i => $c) {
            $c["image"] = $this->cambiarBarra($c["image"]);
            array_push($Categories, $c);
        }
        $Categories = json_encode($Categories);

        $MostRecent = Product::where('products.status','A')
        ->where('is_combo',false)
        ->select("products.*",DB::raw("taxes.value as impuesto"),DB::raw("( (products.price * taxes.value / 100) + products.price) as calculado"))
        ->leftJoin("det_product_taxes","det_product_taxes.products_id","=","products.id")
        ->leftJoin("taxes","taxes.id","=","det_product_taxes.taxes_id")
        ->orderBy('created_at','desc')
        ->take(12)
        ->get();

        $MostView = Product::where('products.status','A')
        ->where('is_combo',false)
        ->select("products.*",DB::raw("taxes.value as impuesto"),DB::raw("( (products.price * taxes.value / 100) + products.price) as calculado"))
        ->leftJoin("det_product_taxes","det_product_taxes.products_id","=","products.id")
        ->leftJoin("taxes","taxes.id","=","det_product_taxes.taxes_id")
        ->orderBy('qty_view','desc')
        ->take(12)
        ->get();

        $MostSold = Product::where('products.status','A')
        ->where('is_combo',false)
        ->select("products.*",DB::raw("taxes.value as impuesto"),DB::raw("( (products.price * taxes.value / 100) + products.price) as calculado"))
        ->leftJoin("det_product_taxes","det_product_taxes.products_id","=","products.id")
        ->leftJoin("taxes","taxes.id","=","det_product_taxes.taxes_id")
        ->orderBy('qty_sold','desc')
        ->take(12)
        ->get();

        $BestPrice = Product::where('products.status','A')
        ->where('is_combo',false)
        ->select("products.*",DB::raw("taxes.value as impuesto"),DB::raw("( (products.price * taxes.value / 100) + products.price) as calculado"))
        ->leftJoin("det_product_taxes","det_product_taxes.products_id","=","products.id")
        ->leftJoin("taxes","taxes.id","=","det_product_taxes.taxes_id")
        ->orderBy('price','asc')
        ->take(12)
        ->get();

        $Combos = Product::where('products.status','A')
        ->where('is_combo',true)
        ->select("products.*",DB::raw("taxes.value as impuesto"),DB::raw("( (products.price * taxes.value / 100) + products.price) as calculado"))
        ->leftJoin("det_product_taxes","det_product_taxes.products_id","=","products.id")
        ->leftJoin("taxes","taxes.id","=","det_product_taxes.taxes_id")
        ->take(8)
        ->get();

        return view("home",[
            "tasa_dolar"=>$Coin->rate,
            "sliders"=>$Slider,
            "categories"=>$Categories,
            "medio_bajo"=>$Medio_Bajo,
            "recent"=>$MostRecent,
            "viewed"=>$MostView,
            "sold"=>$MostSold,
            "bestprice"=>$BestPrice,
            "combos"=>$Combos,
            "footer"=>$footer
        ]);
    }

    public function join() {
        return view("register");
    }
}
