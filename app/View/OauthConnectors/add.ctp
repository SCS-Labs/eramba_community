<div class="row">
	<div class="col-md-7">
		<div class="widget box widget-form">
			<div class="widget-header">
				<h4>&nbsp;</h4>
			</div>
			<div class="widget-content">

				<?php
					if (isset($edit)) {
						echo $this->Form->create( 'OauthConnector', array(
							'url' => array( 'controller' => 'oauthConnectors', 'action' => 'edit' ),
							'class' => 'form-horizontal row-border',
							'novalidate' => true
						) );

						echo $this->Form->input( 'id', array( 'type' => 'hidden' ) );
						$submit_label = __( 'Edit' );
					}
					else {
						echo $this->Form->create( 'OauthConnector', array(
							'url' => array( 'controller' => 'oauthConnectors', 'action' => 'add' ),
							'class' => 'form-horizontal row-border',
							'novalidate' => true
						) );

						$submit_label = __( 'Add' );
					}
				?>

				<div class="tabbable box-tabs box-tabs-styled">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#tab_general" data-toggle="tab"><?php echo __('General'); ?></a></li>

						<?php
						echo $this->element('CustomFields.tabs');
						?>
					</ul>
					<div class="tab-content">
						<div class="tab-pane fade in active" id="tab_general">

							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo __( 'Name' ); ?>:</label>
								<div class="col-md-10">
									<?php echo $this->Form->input( 'name', array(
										'label' => false,
										'div' => false,
										'class' => 'form-control'
									) ); ?>
									<span class="help-block"><?php echo __( 'Name of this OAuth Connector' ); ?></span>
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo __( 'Client ID' ); ?>:</label>
								<div class="col-md-10">
									<?php echo $this->Form->input( 'client_id', array(
										'label' => false,
										'div' => false,
										'class' => 'form-control',
										'type' => 'text'
									) ); ?>
									<span class="help-block"><?php echo __( 'Client ID generated by an OAuth provider' ); ?></span>
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo __( 'Client Secret' ); ?>:</label>
								<div class="col-md-10">
									<?php echo $this->Form->input( 'client_secret', array(
										'label' => false,
										'div' => false,
										'class' => 'form-control'
									) ); ?>
									<span class="help-block"><?php echo __( 'Client Secret generated by an OAuth provider' ); ?></span>
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo __( 'Redirect URLs' ); ?>:</label>
								<div class="col-md-10">
									<?php
									foreach ($redirectUrls as $redirectUrl):
									?>
										<div><?= $redirectUrl ?></div>
									<?php
									endforeach;
									?>
									<span class="help-block"><?php echo __( "These URLs are used for redirecting user back to eramba's portal after he have authenticated with provider. Copy these URLs to your provider's API Credentials" ); ?></span>
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo __( 'Provider' ); ?>:</label>
								<div class="col-md-10">
									<?php echo $this->Form->input( 'provider', array(
										'options' => $providers,
										'label' => false,
										'div' => false,
										'class' => 'form-control',
										'empty' => __('Choose provider')
									) ); ?>
									<span class="help-block"><?php echo __( 'Provider of OAuth.' ); ?></span>
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo __('Status'); ?>:</label>
								<div class="col-md-10">
									<?php
									echo $this->Form->input('status', array(
										'options' => OauthConnector::statuses(),
										'label' => false,
										'div' => false,
										'class' => 'form-control'
									));
									?>
									<span class="help-block"><?php echo __('If the connector is disabled or enabled (is ready to be used across the system)') ?></span>
								</div>
							</div>
						</div>

						<?php
						echo $this->element('CustomFields.tabs_content');
						?>
					</div>
				</div>

				<div class="form-actions">
					<?php echo $this->Form->submit( $submit_label, array(
						'class' => 'btn btn-primary',
						'div' => false
					) ); ?>
					&nbsp;
					<?php
					echo $this->Ajax->cancelBtn('OauthConnector');
					?>
				</div>

				<?php echo $this->Form->end(); ?>

			</div>
		</div>
	</div>
	<div class="col-lg-5">
		<?php
		echo $this->element('ajax-ui/sidebarWidget', array(
			'model' => 'OauthConnector',
			'id' => isset($edit) ? $this->data['OauthConnector']['id'] : null
		));
		?>
	</div>
</div>