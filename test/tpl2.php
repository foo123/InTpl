<?php $this->extend(ROOT . "/tpl1.php"); ?>

<?php $this->start("b1"); ?>(2 1)<?php $this->super->block("b1"); ?><?php $this->end("b1"); ?>

<?php $this->start("b2"); ?>(2 2)<?php $this->super->block("b2"); ?><?php $this->end("b2"); ?>

<?php $this->start("b3"); ?>(2 3)<?php $this->super->block("b3"); ?><?php $this->end("b3"); ?>

