<div class="di" style="height:540px; border:#999 1px solid; width:53.2%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
	<marquee scrolldelay="120" direction="left" style="position:absolute; width:100%; height:40px;">
		<?php
		$rows = $Ad->all(['sh' => 1]);
		foreach ($rows as $row) {
			echo $row['text'];
			echo "/&nbsp;&nbsp;";
		}
		?>
	</marquee>
	<div style="height:32px; display:block;"></div>
	<!--正中央-->
	<?php
	$total = $News->count(['sh' => 1]);
	$div = 5;
	$pages = ceil($total / $div);
	$now = $_GET['p'] ?? 1;
	$start = ($now - 1) * $div;
	?>
	<ol start="<?= $start + 1; ?>">
		<?php
		$rows = $News->all(['sh' => 1], " limit $start,$div");
		foreach ($rows as $row) {
		?>
			<li class="sswww"><?= mb_substr($row['text'], 0, 20); ?>...
				<div class="all" style="display: none;"><?= $row['text']; ?>
			</li>
		<?php
		}
		?>
	</ol>
	<div class="cent">
		<?php
		if ($now > 1) {
			$prev = $now - 1;
			echo "<a href='?do=$do&p=prev'><</a>";
		}
		for ($i = 1; $i <= $pages; $i++) {
			$fontsize = ($now == $i) ? '24px' : '16px';
			echo "<a href='?do=$do&p=$i'style='font-size:$fontsize'>$i</a>";
		}
		if ($now < $pages) {
			$next = $now + 1;
			echo "<a href='?do=$do&p=next'>></a>";
		}
		?>
	</div>
</div>

<script>
	$(".sswww").hover(
		function() {
			$("#alt").html("" + $(this).children(".all").html() + "").css({
				"top": $(this).offset().top - 50
			})
			$("#alt").show()
		}
	)
	$(".sswww").mouseout(
		function() {
			$("#alt").hide()
		}
	)
</script>