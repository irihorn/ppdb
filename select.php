<?php  
 $connect = mysqli_connect("localhost", "root", "", "ppdb");  
 $output = '';  
 $sql = "SELECT * FROM patients ORDER BY id DESC";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="5%"> №</br>п/п</th>  
                     <th width="25%">Фамилия</th>
                     <th width="20%">Имя</th>
                     <th width="20%">Отчество</th>  
                     <th width="5%">Возраст</th>  
                     <th width="15%">История болезни №</th>
                     <th width="5%">Пол</th>
                     <th width="5%">Изменить</th>  
                </tr>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td id="ptn_id" data-id0="'.$row["id"].'">'.$row["id"].'</td>  
                     <td class="first_name" data-id1="'.$row["id"].'">'.$row["first_name"].'</td>  
                     <td class="name" data-id2="'.$row["id"].'">'.$row["name"].'</td>  
                     <td class="last_name" data-id3="'.$row["id"].'">'.$row["last_name"].'</td>
                     <td class="age" data-id4="'.$row["id"].'">'.$row["age"].'</td>
                     <td class="case_report_num" data-id5="'.$row["id"].'">'.$row["case_report_num"].'</td>
                     <td class="gender" data-id6="'.$row["id"].'">'.$row["gender"].'</td>
                     <td><button type="button" name="btn_add" id="btn_add" class="btn btn-sm btn-primary">&#9997;</button></td>
                </tr>  
           ';  
      }  
      
 }  
 else  
 {  
      $output .= '<tr>  
                          <td colspan="4">Data not Found</td>  
                     </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>  