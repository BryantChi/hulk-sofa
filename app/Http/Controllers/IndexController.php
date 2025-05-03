<?php

namespace App\Http\Controllers;

use App\Models\Admin\CaseInfo;
use App\Models\Admin\Category;
use App\Models\Admin\LatestAnnouncementsInfo;
use App\Repositories\Admin\SeoSettingRepository;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index()
    {
        $seoInfo = SeoSettingRepository::getInfo('/*');
        $categoryInfo = Category::all();
        $cases = CaseInfo::orderBy('created_at', 'desc')->get();
        return view('index')
            ->with('seoInfo', $seoInfo)
            ->with('categories', $categoryInfo)
            ->with('cases', $cases);
    }
}
