<?php
namespace App\Controllers;

//(hardwiring products thru a json file);
//use App\Products;

class ProductController extends Controller
{

    private $products;
    
    public function __construct($app)
    {
        parent::__construct($app);
        
        //(hardwiring products thru a json file);
        //$this->products = new Products($this->app->path('database/products.json'));
    }

    public function index()
    {

        return $this->app->view('products.index', [
            'products' => $this->app->db()->all('products')
            //old hardwire method;
            //$this->products->getAll()
            ]);



    }
    public function show() {

        $id = $this->app->param('id');

        if(is_null($id)){
            $this->app->redirect('/products');
        }

        //$product = $this->products->getById($id);
        $product = $this->app->db()->findById('products', $id);

        if(is_null($product)){
            return $this->app->view('products.missing', ['id' => $id]);
        }
        //Load review details
        $reviews = $this->app->db()->findByColumn('reviews', 'product_id', '=', $id);

        $confirmationName = $this->app->old('confirmationName');

        return $this->app->view('products.show',[
            'product' => $product,
            'reviews' => $reviews,
            'confirmationName' => $confirmationName,
        ]);
    }

    public function saveReview()
    {
    //check it
    $this->app->validate([
        'name' => 'required',
        'review' => 'required|minLength:200',
    ]);

    //save it
    $name = $this->app->input('name'); 
    $review = $this->app->input('review');
    $id = $this->app->input('id');

    //stick it in the database
    $data = [
        'name' => $name,
        'review' => $review,
        'product_id' => $id,
    ];
    $this->app->db()->insert('reviews', $data);


    $this->app->redirect('/product?id='.$id, ['confirmationName' => $name]);




    }
}