<?php
header("Content-Type: text/html; charset=iso-8859-1",true); 
require_once('./data_classes/server-data.php_data_classes-core.php.php');
require_once('./data_classes/server-data.php_data_classes-session.php.php');
$maintenance2 = mysql_num_rows(mysql_query("SELECT * FROM cms_settings WHERE mantenimiento = '1'"));
$useradmin2 = mysql_query("SELECT * FROM users WHERE username = '" . $_SESSION['username'] . "'");
$useradmin = mysql_fetch_array($useradmin2);
if($maintenance2 == '1' && $useradmin['rank'] < 5){
		header("Location: manutencao");
}
if($_POST['iduser'] != ""){
			$num1 = $_POST['iduser'];
header("location: $path/perfil?pesquisa=$num1");
		}
?>
<?php include_once("Pagina/HeadCMS.php"); ?>
<div class="container wow" data-wow-duration="1000ms" data-wow-delay="600ms">
<div class="container">
<div class="row">
<div class="col-md-4">
<div class="panel panel-primary">
<div class="panel-heading">Top 5 Promoções</div>
<?php
$e = mysql_query("SELECT username,look,rank_promocao,id FROM users WHERE rank_promocao > 1 ORDER BY rank_promocao DESC LIMIT 5");
while($f = mysql_fetch_array($e)){
?>
<div class="list-group">                   
<a class="list-group-item" style="text-decoration: none;" href="perfil?pesquisa=<?php echo $f['username']; ?>">
<div class="media">
<div class="media-left">
<div style="background-image: url(http://www.habbo.com.br/habbo-imaging/avatarimage?figure=<?php echo $f['look']; ?>&size=m&direction=2&head_direction=2&gesture=sml); background-position: -2px -17px; width:50px; height:50px;">
</div>
</div>
<div class="media-body">
<b><?php echo $f['username']; ?></b>
<br><?php echo $f['rank_promocao']; ?> Pontos                                    <br>Ganhou <?php echo $f['rank_promocao']; ?> Promoções                                </div>
</div>
</a>
</div>
<?php } ?>
</div>
<div class="panel panel-primary">
<div class="panel-heading">Top 5 Eventos</div>
<?php
$e = mysql_query("SELECT username,look,premiar,id FROM users WHERE rank < 4 ORDER BY premiar DESC LIMIT 5");
while($f = mysql_fetch_array($e)){
?>
<div class="list-group">                   
<a class="list-group-item" style="text-decoration: none;" href="perfil?pesquisa=<?php echo $f['username']; ?>">
<div class="media">
<div class="media-left">
<div style="background-image: url(http://www.habbo.com.br/habbo-imaging/avatarimage?figure=<?php echo $f['look']; ?>&size=m&direction=2&head_direction=2&gesture=sml); background-position: -2px -17px; width:50px; height:50px;">
</div>
</div>
<div class="media-body">
<b><?php echo $f['username']; ?></b>
<br><?php echo $f['premiar']; ?> Pontos de eventos                                   <br>Ganhou <?php echo $f['premiar']; ?> eventos                              </div>
</div>
</a>
</div>
<?php } ?>
</div>
</div>
<div class="col-md-8">
<div class="panel panel-default">
<div class="panel-heading">Hall da fama</div>
<div class="panel-body">
<p><center><img src="http://2.bp.blogspot.com/-AGPr2FthxJE/ULo8U3TRo6I/AAAAAAAAAX8/BbyKo-_ptJ0/s1600/habbo5.gif" alt="" width="433" height="244" /></center><br />O Hall da Fama &eacute; um sistema de gerenciamento de pontos dos usu&aacute;rios do hotel, aqui s&atilde;o cadastrados todos os usu&aacute;rios e ent&atilde;o &eacute; gerado um ranking dos dez usu&aacute;rios com mais pontos, esses pontos s&atilde;o ganhos atrav&eacute;s de promo&ccedil;&otilde;es criadas pelos gerentes do hotel.</p>
<p>Em cada not&iacute;cia e/ou promo&ccedil;&atilde;o &eacute; determinado se aquela atividade participar&aacute; ou n&atilde;o do <strong>Hall</strong> e caso participe nela tamb&eacute;m constar&aacute; o n&uacute;mero de pontos que ser&atilde;o atribu&iacute;dos aos futuros ganhadores da atividade. <br /> <br /> E como j&aacute; dito a &uacute;nica forma de entrar no ranking dos dez mais do hotel &eacute; acumulando pontos distribu&iacute;dos nas atividades da equipe e assim ultrapassar aqueles que j&aacute; est&atilde;o no Hall, mas qualquer pessoa est&aacute; sujeita a subir ou descer, ent&atilde;o n&atilde;o deixe de acompanhar as novas promo&ccedil;&otilde;es, e claro de faz&ecirc;-las!</p>
<p>Cada perfil contar&aacute; com todos os emblemas ganhados dos usu&aacute;rios e o link das atividades vencidas por ele, assim fica mais f&aacute;cil de acompanhar os usu&aacute;rios que mais se destacam no hotel atrav&eacute;s de seus perfis.</p>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-4">
<div class="panel panel-success">
<div class="panel-heading">TOP 5 Moedas ONLINE</div>
<?php
$e = mysql_query("SELECT username,look,credits,id FROM users WHERE rank < 4 ORDER BY credits DESC LIMIT 5");
while($f = mysql_fetch_array($e)){
?>
<div class="list-group">
<a class="list-group-item" style="text-decoration: none;" href="perfil?pesquisa=<?php echo $f['username']; ?>">
<div class="media">
<div class="media-left">
<div style="background-image: url(http://www.habbo.com.br/habbo-imaging/avatarimage?figure=<?php echo $f['look']; ?>&size=m&direction=2&gesture=sml&action=std,wav&head_direction=3); background-position: -8px -17px; width:50px; height:50px;">
</div>
</div>
<div class="media-body">
<b><?php echo $f['username']; ?><small>
</small>
</b>
<br>
<span style="color:#ffb638;"><i class="fa fa-circle" aria-hidden="true"></i> <?php echo $f['credits']; ?> Moedas</span>
</div>
</div>
</a>
</div>
<?php } ?>
</div></div>
<div class="col-md-4">
<div class="panel panel-info">
<div class="panel-heading">TOP 5 Diamantes ONLINE</div>
<?php
$e = mysql_query("SELECT username,look,vip_points,id FROM users WHERE rank < 4 ORDER BY vip_points DESC LIMIT 5");
while($f = mysql_fetch_array($e)){
?>
<div class="list-group">
<a class="list-group-item" style="text-decoration: none;" href="perfil?pesquisa=<?php echo $f['username']; ?>">
<div class="media">
<div class="media-left">
<div style="background-image: url(http://www.habbo.com.br/habbo-imaging/avatarimage?figure=<?php echo $f['look']; ?>&size=m&direction=2&gesture=sml&action=std,wav&head_direction=3); background-position: -8px -17px; width:50px; height:50px;">
</div>
</div>
<div class="media-body">
<b><?php echo $f['username']; ?>                                                    </b>
<br>
<span style="color:#00d0ca;"><i class="fa fa-diamond" aria-hidden="true"></i> <?php echo $f['vip_points']; ?> Diamantes</span>
</div>
</div>
</a>
</div>
<?php } ?>
</div></div>
<div class="col-md-4">
<div class="panel panel-warning">
<div class="panel-heading">TOP 5 Boias ONLINE</div>
<?php
$e = mysql_query("SELECT username,look,activity_points,id FROM users WHERE rank < 4 ORDER BY activity_points DESC LIMIT 5");
while($f = mysql_fetch_array($e)){
?>
<div class="list-group">
<a class="list-group-item" style="text-decoration: none;" href="perfil?pesquisa=<?php echo $f['username']; ?>">
<div class="media">
<div class="media-left">
<div style="background-image: url(http://www.habbo.com.br/habbo-imaging/avatarimage?figure=<?php echo $f['look']; ?>&size=m&direction=2&gesture=sml&action=std,wav&head_direction=3); background-position: -8px -17px; width:50px; height:50px;">
</div>
</div>
<div class="media-body">
<b><?php echo $f['username']; ?>                            </b>
<br>
<span style="color:#f15b83;"><i class="fa fa-life-ring" aria-hidden="true"></i> <?php echo $f['activity_points']; ?> Boias</span>
</div>
</div>
</a>
</div>
<?php } ?>
</div></div>
</ul>
</div>
</div></br>
<li class="list-group-item list-group-item" style=" text-transform: uppercase; ">
<div class="row">
<center>
<form method="POST">
<div class="col-sm-12">
<div class="col-sm-3">
<strong>Procurar perfil do usuário:</strong>
</div>
<div class="col-sm-7">
<input type="text" name="iduser" class="form-control">
</div>
<input type="submit" class="btn btn-info" value="PESQUISAR">
</div>
</form>
</center>
</div>
</li>
</div>
</section><!--/#bottom-->
<?php include_once("Pagina/Foorte.php"); ?>