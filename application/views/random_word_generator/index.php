<?php $this->load->view('partials/header'); ?>
    <p>Random Word (attempt #<?php echo $count; ?>)</p>
    <h1><?php echo $random_word; ?><h1>
    <a href='<?php echo ('/random_word_generator') ?>'>Generate</a>
<?php $this->load->view('partials/footer'); ?>