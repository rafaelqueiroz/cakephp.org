<section id="recipe" class="mb0 pt-90">
	<div class="container">
		<div class="text-center">
			<h2><?= __('A recipe to succeed.') ?></h2>
			<h4><?= __('Prototype faster, Validate faster, Grow consistently.') ?></h4>
		</div>

		<div class="service-boxes">
			<div class="box-services-c">
				<?= $this->Html->image('build_quickly.svg') ?>
				<h3 class="title-small"><?= __('Build Quickly') ?></h3>
				<p>
					<?= __('Use code generation and scaffolding features to {0}.',
						$this->Html->tag('strong', __('rapidly build prototypes'))) ?>
				</p>
			</div>

			<div class="box-services-c">
				<?= $this->Html->image('no_config.svg') ?>

				<h3 class="title-small"><?= __('No Configuration') ?></h3>

				<p><?= __('No complicated XML or YAML files. Just setup your database and you\'re {0}.',
						$this->Html->tag('strong', __('ready to
								bake'))) ?></p>
			</div>

			<div class="box-services-c">
				<?= $this->Html->image('license.svg') ?>

				<h3 class="title-small"><?= __('Friendly License') ?></h3>
				<p>
					<?= __('CakePHP is licensed under the MIT license which makes it perfect for use in {0}.',
						$this->Html->tag('strong', __('Commercial applications'))) ?>
				</p>
			</div>

			<div class="box-services-c">
				<?= $this->Html->image('batteries_included.svg') ?>

				<h3 class="title-small"><?= __('Batteries Included') ?></h3>

				<p><?= __('{0}. Translations, database access, caching,
							validation, authentication, and much more are all built into one of the original PHP MVC
							frameworks.', $this->Html->tag('strong', __('The things you need are built-in'))) ?></p>
			</div>

			<div class="box-services-c">
				<?= $this->Html->image('mvc.svg') ?>

				<h3 class="title-small"><?= __('Clean MVC Conventions') ?></h3>

				<p>
					<?= __('Instead of having to plan where things go, CakePHP comes with a {0} to guide you in developing your application',
						$this->Html->tag('strong', __('set of
								conventions'))) ?>
				</p>
			</div>

			<div class="box-services-c">
				<?= $this->Html->image('secure.svg') ?>
				<h3 class="title-small"><?= __('Secure') ?></h3>
				<p><?= __('CakePHP comes with built-in tools for input validation, CSRF protection, Form tampering
							protection, SQL injection prevention, and XSS prevention. CakePHP codebase itself has been audited
							through the {0} program.', $this->Html->link('Mozilla Secure Open Source',
						'https://bakery.cakephp.org/2017/11/22/mozilla_sos_audit_published.html')) ?></p>
			</div>
		</div>
	</div>
</section>
