<?php
   $num=0;    //������¼Ŀ¼�µ��ļ�����
   $dirname='./'; //Ҫ������Ŀ¼����
   $dir_handle=opendir($dirname);

   echo '<table border="1" align="center" width="960px" cellspacing="0" cellpadding="0">';
   echo '<caption><h2>Ŀ¼'.$dirname.'������</h2></caption>';
   echo '<tr align="left" bgcolor="#cccccc">';
   echo '<th>���</th><th>����</th><th>��С</th><th>����</th><th>�޸�ʱ��</th></tr>';
   while($file=readdir($dir_handle))
   {
   	 if($file!="."&&$file!="..")
   	 {
   	 	$dirFile=$dirname."/".$file;
   	 	if($num++%2==0)    //���л�ɫ
   	 		$bgcolor="#ffffff";
   	 	else 
   	 		$bgcolor="#cccccc";
   	 	echo '<tr bgcolor='.$bgcolor.'>';
   	 	echo '<td>'.$num.'</td>';//���
   	 	echo '<td><a href="'.$file.'" target="_blank">'.$file.'</a></td>'; //���� ����
   	 	echo '<td>'.filesize($dirFile).'</td>';//��С
   	 	echo '<td>'.filetype($dirFile).'</td>';//����
   	 	echo '<td>'.date("Y/n/t",filemtime($dirFile)).'</td>';//�޸�ʱ��
   	 	echo '</tr>';
   	 }
   }
   echo '</table>';
   closedir($dir_handle);
   echo '��<b>'.$dirname.'</b>Ŀ¼�µ���Ŀ¼���ļ�����<b>'.$num.'</b>��';
?>