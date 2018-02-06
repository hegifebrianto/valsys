
<div id="dialog" title="Please Login ! ">
<p><?=form_label('Username :', 'username')?></p>
<p><?=form_input(array('value'=>'','id'=>'username','name'=>'username','size'=>'30','class'=>'text ui-widget-content ui-corner-all'))?></p>
<p class="error_username"></p>
<p><?=form_label('Password :', 'password')?></p>
<p><?=form_password(array('value'=>'','id'=>'password','name'=>'password','size'=>'30','class'=>'text ui-widget-content ui-corner-all'))?></p>
<p class="error_password"></p>
</div>
