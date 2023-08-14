<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// المسار: app/Http/Controllers/SmartPhoneController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Smartphone;

class DashboardController extends Controller
{
    public function index()
    {
        // استرجاع جميع الهواتف الذكية من قاعدة البيانات
        $phones = Smartphone::all();

        return view('smartphone.dashboard', compact('phones'));
    }

    public function create()
    {
        // عرض الواجهة لإضافة هاتف جديد
        return view('smartphone.create_smartphone');
    }

    public function store(Request $request)
    {
        // التحقق من البيانات المدخلة وحفظها في قاعدة البيانات
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'description' => 'required',
            'category' => 'required'
        ]);

        $imagePath = $request->file('image')->store('public/images');
        $imageName = basename($imagePath);

        $smartphone = new Smartphone([
            'name' => $request->input('name'),
            'image' => $imageName,
            'price' => $request->input('price'),
            'quantity' => $request->input('quantity'),
            'description' => $request->input('description'),
            'category' => $request->input('category')
        ]);

        $smartphone->save();

        return redirect()->route('dashboard')->with('success', 'تمت إضافة الهاتف بنجاح');
    }

    public function edit($id)
    {
        // استرجاع الهاتف الذكي المحدد من قاعدة البيانات للتعديل عليه
        $smartphone = Smartphone::find($id);

        return view('smartphone.edit_smartphone', compact('smartphone'));
    }

    public function update(Request $request, $id)
    {
        // التحقق من البيانات المدخلة وتحديث بيانات الهاتف في قاعدة البيانات
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'description' => 'required',
            'category' => 'required'
        ]);

        $smartphone = Smartphone::find($id);
        $smartphone->name = $request->input('name');
        $smartphone->price = $request->input('price');
        $smartphone->quantity = $request->input('quantity');
        $smartphone->description = $request->input('description');
        $smartphone->category = $request->input('category');
        $smartphone->save();

        return redirect()->route('dashboard')->with('success', 'تم تحديث بيانات الهاتف بنجاح');
    }

    public function destroy($id)
    {
        // حذف الهاتف الذكي المحدد من قاعدة البيانات
        $smartphone = Smartphone::find($id);
        $smartphone->delete();

        return redirect()->route('dashboard')->with('success', 'تم حذف الهاتف بنجاح');
    }
}

