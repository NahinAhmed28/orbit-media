<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Menuitem;

class frontController extends Controller
{
    public function __construct(){
        $topNav = Menu::where('location',1)->first();
        $topNavItems = json_decode($topNav->content);
        $topNavItems = $topNavItems[0];
        foreach($topNavItems as $menu){
            $menu->title = MenuController::where('id',$menu->id)->value('title');
            $menu->name = MenuController::where('id',$menu->id)->value('name');
            $menu->slug = MenuController::where('id',$menu->id)->value('slug');
            $menu->target = MenuController::where('id',$menu->id)->value('target');
            $menu->type = MenuController::where('id',$menu->id)->value('type');
            if(!empty($menu->children[0])){
                foreach ($menu->children[0] as $child) {
                    $child->title = MenuController::where('id',$child->id)->value('title');
                    $child->name = MenuController::where('id',$child->id)->value('name');
                    $child->slug = MenuController::where('id',$child->id)->value('slug');
                    $child->target = MenuController::where('id',$child->id)->value('target');
                    $child->type = MenuController::where('id',$child->id)->value('type');
                }
            }
        }
        view()->share([
            'topNavItems' => $topNavItems,
        ]);
    }

    public function index(){
        return view ('index');
    }
}
