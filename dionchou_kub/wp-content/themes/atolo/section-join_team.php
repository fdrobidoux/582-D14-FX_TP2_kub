<!--JOIN TEAM-->
<section id="join-team" class="mutualWrap shadow">
<div class="container">
<div class="row">
<div class="span12 sub-sec-title">
<?php $join_title = ot_get_option( 'join_title'); ?>
<h1><?php echo $join_title;?></h1>
</div><!--end span12 -->

<div class="span12">
<?php $join_text = ot_get_option( 'join_text'); ?>
<p><?php echo $join_text;?></p>
<div class="join-button">
<?php $join_btn_text = ot_get_option( 'join_btn_text'); ?>
<?php $join_btn_url = ot_get_option( 'join_btn_url'); ?>
<a href="<?php echo $join_btn_url;?>"><?php echo $join_btn_text;?></a>
</div>

</div><!--end span12-->

</div><!--end row -->
</div><!--end container -->
</section><!--end-join-team-->

<!--END JOIN TEAM-->