<?php

    define('FONT_FOLDER','');

    $MIMES=array(
        '.eot'=>'application/vnd.ms-fontobject',
        '.ttf'=>'font/ttf',
        '.otf'=>'font/otf',
        '.woff'=>'font/x-woff',
        '.svg'=>'image/svg+xml',
    );


    $IKnowMime=MimeByExtension(GetExt($s));
    $f=preg_replace('/[^a-zA-Z.0-9-_]/','',$_REQUEST['f']);

/* 
    header("Cache-Control: private, max-age=10800, pre-check=10800");
    header("Pragma: private");
    header("Expires: " . date(DATE_RFC822,strtotime(" 2 day")));
*/    
    header('Content-type: '.$IKnowMime );
    header("Content-Transfer-Encoding: binary");
    header('Content-Length: '.filesize(FONT_FOLDER.$f));
    header('Content-Disposition: attachment; filename="'.$f.'";');

    header('Access-Control-Allow-Origin: *');

    readfile(FONT_FOLDER.$f);

    function GetExt($File) {
        $File=explode('.',$File);
        if(count($File)==1) return '';
        return '.'.$File[count($File)-1];
    }

    function MimeByExtension($ex) {
        global $MIMES;
        $ex=strtolower($ex);
        if(isset($MIMES[$ex])) return $MIMES[$ex];
        else return FALSE;
    }

?>