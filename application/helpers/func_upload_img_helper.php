<?
    function upLoadImg($s1)
    {
        if(!is_dir('upload/'.date("Y",time()).'/'.date("m",time()).'/'.date("d",time())))
        {
            mkdir('upload/'.date("Y",time())."/".date("m",time())."/".date("d",time()), 0755, TRUE);
        }
        $file_image	= $_FILES[$s1]['name'];
        $filename 	= $_FILES[$s1]['name'];
        $filedata 	= $_FILES[$s1]['tmp_name']; 
        $temp		= explode('.',$filename);
        $imageThumb = new Image($filedata);   
        $thumb_path = "new_images".date("YmdHis",time()).rand(10000,99999);
        $imageThumb->save($thumb_path, 'upload/'.date("Y",time())."/".date("m",time())."/".date("d",time()), $temp[1]);
        $imageThumb->resize(300,300,'crop');	
        $imguser	= $thumb_path.".".$temp[1];
        return $imguser;
    }

    function upLoadMultipleImg($img)
    {
        $list_name 		= []; 	
        $count_files 	= count($_FILES[$img]['name']);
        if(!is_dir('upload/'.date("Y",time()).'/'.date("m",time()).'/'.date("d",time())))
        {
            mkdir('upload/'.date("Y",time())."/".date("m",time())."/".date("d",time()), 0755, TRUE);
        }
        $arr_img_mb = [];
        for ($i=0; $i < $count_files; $i++) { 
            $file_image	= $_FILES[$img]['name'][$i];
            $filename 	= $_FILES[$img]['name'][$i];
            $filedata 	= $_FILES[$img]['tmp_name'][$i];
            $temp		= explode('.',$filename);
            $imageThumb = new Image($filedata);    
            $thumb_path = "new_images".date("YmdHis",time()).rand(10000,99999);
            $imageThumb->save($thumb_path, 'upload/'.date("Y",time())."/".date("m",time())."/".date("d",time()), $temp[1]);
            $imageThumb->resize(300,300,'crop');	
            $imguser	= $thumb_path.".".$temp[1];
            $arr_img_mb [] = $imguser;
        }
        return json_encode($arr_img_mb);
    }
    function UpdateUpLoadMultipleImg($img,$time)
    {
        $list_name 		= []; 	
        $count_files 	= count($_FILES[$img]['name']);
        if(!is_dir('upload/'.date("Y",$time).'/'.date("m",$time).'/'.date("d",$time)))
        {
            mkdir('upload/'.date("Y",$time)."/".date("m",$time)."/".date("d",$time), 0755, TRUE);
        }
        $arr_img_mb = [];
        for ($i=0; $i < $count_files; $i++) { 
            $file_image	= $_FILES[$img]['name'][$i];
            $filename 	= $_FILES[$img]['name'][$i];
            $filedata 	= $_FILES[$img]['tmp_name'][$i];
            $temp		= explode('.',$filename);
            $imageThumb = new Image($filedata);    
            $thumb_path = "new_images".date("YmdHis",$time).rand(10000,99999);
            $imageThumb->save($thumb_path, 'upload/'.date("Y",$time)."/".date("m",$time)."/".date("d",$time), $temp[1]);
            $imageThumb->resize(300,300,'crop');	
            $imguser	= $thumb_path.".".$temp[1];
            $arr_img_mb [] = $imguser;
        }
        return $arr_img_mb;
    }
    function UpdateUpLoadImg($s1,$s2)
    {
        if(!is_dir('upload/'.date("Y",$s2).'/'.date("m",$s2).'/'.date("d",$s2)))
        {
            mkdir('upload/'.date("Y",$s2)."/".date("m",$s2)."/".date("d",$s2), 0755, TRUE);
        }
        $file_image	= $_FILES[$s1]['name'];
        $filename 	= $_FILES[$s1]['name'];
        $filedata 	= $_FILES[$s1]['tmp_name']; 
        $temp		= explode('.',$filename);
        $imageThumb = new Image($filedata);   
        $thumb_path = "new_images".date("YmdHis",$s2).rand(10000,99999);
        $imageThumb->save($thumb_path, 'upload/'.date("Y",$s2)."/".date("m",$s2)."/".date("d",$s2), $temp[1]);
        $imageThumb->resize(300,300,'crop');	
        $imguser	= $thumb_path.".".$temp[1];
        return $imguser;
    }
?>