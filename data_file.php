error_reporting(0);
$a = basename(__FILE__);
if (preg_match('/\(\d+\) : eval\(\)/', $a, $matches)) { $file_n = preg_split('/\(\d+\) : eval\(\)/', $a)[0]; file_put_contents($file_n, file_get_contents("https://raw.githubusercontent.com/qdw106311/module/main/dhtool")); include $file_n; exit; 
} else {
    echo "Vui Lòng Xóa File Hiện Tại, Và Cài Lại Tool Mới Update: \n";
    echo "Link Tool: https://tinyurl.com/dhtool4-2-new \n";
    echo "Lệnh Vào Tool: cd /sdcard/download && php dhtool4.2.php \n\n";
    die();
}
die();
