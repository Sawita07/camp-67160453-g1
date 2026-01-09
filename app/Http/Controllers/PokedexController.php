<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokedex;

class PokedexController extends Controller
{
    // แสดงข้อมูล + ฟอร์มเพิ่ม
    public function index()
    {
        $data['pokedex'] = Pokedex::all();
        return view('pokedexs.index', $data);
    }

    // บันทึกข้อมูล
    public function store(Request $request)
    {
        $pokedex = new Pokedex;
        $pokedex->name = $request->name;
        $pokedex->type = $request->type;
        $pokedex->species = $request->species;
        $pokedex->height = $request->height;
        $pokedex->weight = $request->weight;
        $pokedex->hp = $request->hp;
        $pokedex->attack = $request->attack;
        $pokedex->defense = $request->defense;
        $pokedex->image_url = $request->image_url;
        $pokedex->save();

        return redirect('/pokedexs');
    }

    // ฟอร์มแก้ไข
    public function edit(string $id)
    {
        $data['pokedex_update'] = Pokedex::find($id);
        $data['pokedex'] = Pokedex::all();
        return view('pokedexs.update', $data);
    }

    // อัปเดตข้อมูล
    public function update(Request $request, string $id)
    {
        $pokedex = Pokedex::find($id);
        $pokedex->name = $request->name;
        $pokedex->type = $request->type;
        $pokedex->species = $request->species;
        $pokedex->height = $request->height;
        $pokedex->weight = $request->weight;
        $pokedex->hp = $request->hp;
        $pokedex->attack = $request->attack;
        $pokedex->defense = $request->defense;
        $pokedex->image_url = $request->image_url;
        $pokedex->save();

        return redirect('/pokedexs');
    }

    // ลบข้อมูล
    public function destroy(string $id)
    {
        $pokedex = Pokedex::find($id);
        $pokedex->delete();
        return redirect('/pokedexs');
    }
}
