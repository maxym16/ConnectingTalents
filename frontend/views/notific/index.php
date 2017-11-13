<?php
$date=date('Y-m-d H:i:s');
$i=60;
$h=60*60;
$d=60*60*24;
$m=60*60*24*30;
$y=60*60*24*365;
$nom=0;
?>
<br>
<h2>Notification</h2>
<?php
//debug($idea);
echo date('Y-m-d H:i:s');
?>
<p>Number of notifications : &nbsp;
<?= $cidea ?>    
</p>
<p>&nbsp;</p>
<br>
<div class="container">
    <table>
<?php 
foreach ($idea as $ide){
?>
        <tr>
            <td>
                <?= $ide->email?>&nbsp;&nbsp;&nbsp;
            </td>
            <td>
            <p>Title "<?= $ide->title ?>"</p>
            <p><?= $ide->description ?>&nbsp;&nbsp;&nbsp;</p>
            <p>&nbsp;</p>
            </td>
            <td>
                <p>
                <?php 
                $del=strtotime($date)-strtotime($ide->date);
                if(($inter=intdiv($del,$y))>1){echo 'more than a year ago';}
                else{
                    if(($inter=intdiv($del,$m))>=1){echo $inter.' months ago';}
                    else{
                        if(($inter=intdiv($del,$d))>=1){echo $inter.' days ago';}
                        else{
                            if(($inter=intdiv($del,$h))>=1){echo $inter.' hours ago';}
                            else{
                            $inter=intdiv($del,$i);
                            echo $inter.' minutes ago';
                            }
                        }
                    }
                }
                ?>
                </p>
            </td>
        </tr>
    
    
<?php    
}
?>
    </table>
</div>
