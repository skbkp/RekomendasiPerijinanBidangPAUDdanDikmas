<?php $this->beginContent(Rights::module()->appLayout); ?>

<div id="rights" class="container">

	<div id="content">

		<?php if( $this->id!=='install' ): ?>

			<div id="menu">
				<hr />
				<?php $this->renderPartial('/_menu'); ?>

			</div>

		<?php endif; ?>
		<div class='row'>
			<?php //$this->renderPartial('/_flash'); ?>
		</div>
		<?php echo $content; ?>

	</div><!-- content -->

</div>

<?php $this->endContent(); ?>