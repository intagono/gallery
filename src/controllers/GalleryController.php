<?php
    use \App\Http\Controllers\Controller;

    class GalleryController extends Controller{
        public function index(){
            return view("gallery.index")->with("saludo", "Hola");
        }
    }