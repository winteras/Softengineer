<?PHP
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Severity_level;
class SearchController extends Controller
{
    //首頁
    public function indexPage(Request $request)
    {   

        $Alert_disease = new Severity_level();
        return view('search',['area' => $Alert_disease->get_Severity($request->input('area'))]);
    }
}
?>