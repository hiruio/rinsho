<?php
require('./wp_log/wp-load.php');
?>

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>臨床運動障害研究会</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<div id="wrapper">
  <header>
    <img src="./img/header.png" alt="header">
    <ul id="nav">  
		<li><a href="index.php">HOME</a></li>  
		<li><a href="./staff/index.html">Staff</a></li>  
		<li><a href="./event/index.html">Event</a></li>  
		<li><a href="./log/">Log</a></li>  
		<li><a href="./volunteer/index.html">Volunteer</a></li>  
	</ul> 
</header>
<div id="main">
	<div class="top-img">
		<div class="notice">
			<h2>おしらせ</h2>
			<ul>
			<?php
			//paged = get_query_var( 'paged' );
			//query_posts('cat=5&posts_per_page=5&paged='.$paged);
			//if(have_posts()) : while ( have_posts() ) : the_post();
			$args = array( 'numberposts' => 3, 'order'=> 'ASC', 'orderby' => 'title', 'cat' => '5' );
			$postslist = get_posts( $args );
			foreach ($postslist as $post) :  setup_postdata($post); ?> 
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> -<span class="time"><?php the_time('Y年m月d日（D）'); ?></span></li>
			<?php
			endforeach;
			//endwhile;
			//endif;
			?>
			</ul>
		</div>
		<div class="new">
			<h2>最新報告</h2>
			<ul>
			<?php
			$args = array( 'numberposts' => 5, 'order'=> 'DESC');
			$postslist = get_posts( $args );
			foreach ($postslist as $post) :  setup_postdata($post); ?> 
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> -<span class="time"><?php the_time('Y年m月d日（D）'); ?></span></li>
			<?php
			endforeach;
			?>
		</ul>
		</div>
	</div>
	<p class="concept">
	臨床運動障害研究会では研修会を通して、機能的・能力的アプローチを学び、ボランティアを通じ、日常生活の中で、必要とされている事はどのような事で私たちに求められていることは何か？今ある知識・創造ではなく、肌で感じる機会を提供できればと考えております。利益の一部を、紹介者外出サポート（ボランティア団体）、海外ボランティアへ寄付し、少しでも社会貢献に参加して参ります。
	</p>
<footer>
<table border="0" width="950px" cellpadding="0">
<tr>
<td class="banner">ドミニカレポート バナー</td>
<td><a href="http://ftp.minasehp.jp/"><img src="./img/m.png" width="210" height="90" alt="水無瀬病院"></a></td>
<td><a href="./mail/index.html"><img src="./img/t.png" width="210" height="90" alt="お問い合わせ"></a></td>
</tr>
</table>
<small>Copyright c 2012 miyazaki-seminar All Rights Reserved. </small>
</footer>
</div>
</html>
