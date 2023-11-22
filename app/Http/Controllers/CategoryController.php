<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function allCategories()
    {
        $categories = [
            'CELULARES',
            'INFORMÁTICA',
            'MÓVEIS', 
            'AUTOMOTIVA', 
            'LIVROS', 
            'BELEZA', 
            'ESPORTE', 
            'LUXO'
        ];

        $html = '<ul>';
        foreach ($categories as $category) {
            $html .= "<li>$category</li>";
        }
        $html .= '</ul>';

        echo $html;
    } 
}
