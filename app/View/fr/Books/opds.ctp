<div class="jumbotron">
	<h1>Bienvenue sur la Bibliotheque Numerique</h1>
	<p>Ne pas transmettre à un tiers l'existence de ce site, identifiant ou fichiers</p>
</div>
<div class="row">
	<div class="col col-lg-4">
		<h2><?php echo $this->Html->link('<i class="pull-right icon-user"></i><span class="badge pull-right">' . $info['authors']['summary']['count'] . '</span> Auteurs', array('controller'=>'authors', 'action'=>'index'), array('escape' => false)); ?></h2>
		<p>Liste alphabétique des auteurs</p>
	</div><!--/span-->
	<div class="col col-lg-4">
		<h2><?php echo $this->Html->link('<i class="pull-right icon-book"></i><span class="badge pull-right">' . $info['books']['summary']['count'] . '</span> Livres', array('controller'=>'books', 'action'=>'index'), array('escape' => false)); ?></h2>
		<p>Liste alphabétiques des livres(par titre).</p>
	</div><!--/span-->
	<div class="col col-lg-4">
		<h2><?php echo $this->Html->link('<i class="pull-right icon-laptop"></i><span class="badge pull-right">' . $info['publishers']['summary']['count'] . '</span> Editeurs', array('controller'=>'publishers', 'action'=>'index'), array('escape' => false)); ?></h2>
		<p>Liste alphabétique des éditeurs</p>
	</div><!--/span-->
</div><!--/row-->
<div class="row">
	<div class="col col-lg-4">
		<h2><?php echo $this->Html->link('<i class="pull-right icon-star-half-empty"></i><span class="badge pull-right">' . $info['ratings']['summary']['count'] . '</span> Notes', array('controller'=>'ratings', 'action'=>'index'), array('escape' => false)); ?></h2>
		<p>Liste de livres groupés par classement.</p>
	</div><!--/span-->
	<div class="col col-lg-4">
		<h2><?php echo $this->Html->link('<i class="pull-right icon-list-ol"></i><span class="badge pull-right">' . $info['series']['summary']['count'] . '</span> Séries', array('controller'=>'series', 'action'=>'index'), array('escape' => false)); ?></h2>
		<p>Liste alphabétiques des séries(collection).</p>
	</div><!--/span-->
	<div class="col col-lg-4">
		<h2><?php echo $this->Html->link('<i class="pull-right icon-tags"></i><span class="badge pull-right">' . $info['tags']['summary']['count'] . '</span> Tags', array('controller'=>'tags', 'action'=>'index'), array('escape' => false)); ?></h2>
		<p>Liste alphabétique des Tags.</p>
	</div><!--/span-->
</div><!--/row-->
