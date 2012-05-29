<?php
 // created: 2012-05-02 21:32:14
$dictionary['pos_Speakers']['fields']['twitter_widget']['default_value']='<p>{literal}</p>
<script type="text/javascript">// <![CDATA[
       $.getScript("http://widgets.twimg.com/j/2/widget.js"); new TWTR.Widget({   id: \'twitter_widget\',   version: 2,   type: \'profile\',   rpp: 4,   interval: 30000,   width: 250,   height: 600,   theme: {     shell: {       background: \'#333333\',       color: \'#ffffff\'     },     tweets: {       background: \'#000000\',       color: \'#ffffff\',       links: \'#4aed05\'     }   },   features: {     scrollbar: false,     loop: false,     live: false,     behavior: \'all\'   } }).render().setUser(\'{/literal}{$bean->twitter_id}{literal}\').start();
// ]]></script>
<p>{/literal}</p>';
$dictionary['pos_Speakers']['fields']['twitter_widget']['default']='<p>{literal}</p>
<script type="text/javascript">// <![CDATA[
       $.getScript("http://widgets.twimg.com/j/2/widget.js"); new TWTR.Widget({   id: \'twitter_widget\',   version: 2,   type: \'profile\',   rpp: 4,   interval: 30000,   width: 250,   height: 600,   theme: {     shell: {       background: \'#333333\',       color: \'#ffffff\'     },     tweets: {       background: \'#000000\',       color: \'#ffffff\',       links: \'#4aed05\'     }   },   features: {     scrollbar: false,     loop: false,     live: false,     behavior: \'all\'   } }).render().setUser(\'{/literal}{$bean->twitter_id}{literal}\').start();
// ]]></script>
<p>{/literal}</p>';

 ?>