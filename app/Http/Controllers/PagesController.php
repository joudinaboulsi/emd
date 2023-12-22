<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use SEOMeta;
use SEO;
use App\SeoPage;
use App\HomePage;
use App\News;
use App\Client;
use App\SliderImage;
use App\SliderText;
use App\Product;
use App\Settings;
use App\PageHeader;
use App\About;
use App\ApplicationAbout;
use App\Marketing;
use App\Contact;
use App\Catalog;
use App\Gallery;
use App\MarketingSLiderText;
use App\MarketingSLiderText2;
class PagesController extends Controller
{


    public function __construct()
    {
        
        app()->singleton('contact', function () {
            return Settings::findOrFail(1);
        });
    }



    public function setSeo($page_data)
    {
        SEO::setTitle($page_data->meta_title, false);
        SEO::setDescription($page_data->meta_description, false);
        SEOMeta::setKeywords($page_data->meta_keywords, false);

        if ($page_data->og_image != NULL) {
            SEO::addImages(asset('seo/' . $page_data->og_image));
        }
    }

    public function home()
    {
        $page_data = SeoPage::findOrFail(1);
        $this->setSeo($page_data);

        $homepage = HomePage::where('id',1)->get();
        $products = Product::take(3)->get();
        $clients = Client::all();
        $sliders = SliderImage::all();
        $slidersText = SliderText::all();
        $news = News::all();
        return view('home_page',compact('page_data','homepage','clients','products','sliders','slidersText','news'));
    }

    public function about()
    {
        $page_data = SeoPage::findOrFail(2);
        $this->setSeo($page_data);
        $aboutpage = About::where('id',1)->get();
        $header = PageHeader::where('id',5)->get();
        $app_about = ApplicationAbout::all();
        return view('about',compact('page_data','aboutpage','header','app_about'));
    }

    public function products(Request $request)
    {
        $page_data = SeoPage::findOrFail(3);
        $this->setSeo($page_data);

        $header = PageHeader::where('id',6)->get();
        
        $products  = Product::all();
        return view('products',compact('page_data','products','header'));
    }

    public function  productsDetails($id)
    {
        $header = PageHeader::where('id',6)->get();
        $product  = Product::where('id',$id)->get();
        $products  = Product::where('id','!=',$id)->get();


        $product_page= Product::findOrFail($id);
        $this->setSeo($product_page);

        $product = Product::where('id',$id)->with('components','images','componentsSecond')->get();
        // dd($product);
        $products = Product::where('id', '!=', $id)->get();

        return view('product-details',compact('product','products','header','product_page'));
    }

    public function gallery()
    {
        $page_data = SeoPage::findOrFail(4);
        $this->setSeo($page_data);
        $gallery = Gallery::all();
        $header = PageHeader::where('id',2)->get();

        return view('gallery',compact('page_data','gallery','header'));
    }

    
    public function marketing()
    {
        $page_data = SeoPage::findOrFail(5);
        $this->setSeo($page_data);

        $header = PageHeader::where('id',4)->get();
       
        $marketingpage = Marketing::all();
        $sliders = MarketingSLiderText::all();
        $slidersText = MarketingSLiderText2::all();
        return view('marketing',compact('page_data','marketingpage','header','slidersText','sliders'));
    }

    public function catalogs()
    {
        $page_data = SeoPage::findOrFail(6);
        $this->setSeo($page_data);
        $header = PageHeader::where('id',1)->get();
        $catalogs = Catalog::all();
        return view('catalogs',compact('page_data','catalogs','header'));
    }

    public function contact()
    {
        $page_data = SeoPage::findOrFail(7);
        $this->setSeo($page_data);
        $header = PageHeader::where('id',3)->get();
        $contactpage = Contact::where('id',1)->get();
        return view('contact',compact('page_data','contactpage','header'));
    }
}
