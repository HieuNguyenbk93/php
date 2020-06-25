@extends('layout')

@section('content')
<br>
<h2>Hiển thị bài đăng</h2>
<?php
    if ($qa):
        foreach ($qa as $index => $item):
?>
        <?php if ($index % 2 == 0): ?>
            <div class="row">
                <div class="col-8">
                    <div class="alert alert-primary" role="alert">
                        <h4><?php echo $item->title ?></h4>
                        <h5><?php echo $item->content ?></h5>
                    </div>
                </div>
                <div class="col-4"></div>
            </div>
        <?php endif; ?>
        
        <?php if ($index % 2 == 1): ?>
            <div class="row">
                <div class="col-4"></div>
                <div class="col-8">
                    <div class="alert alert-secondary" role="alert">
                        <h4><?php echo $item->title ?></h4>
                        <h5><?php echo $item->content ?></h5>
                    </div>
                </div>
            </div>
        <?php endif; ?>
<?php
        endforeach;
    endif;
?>
<br>

@endsection