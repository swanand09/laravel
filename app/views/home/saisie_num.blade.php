@extends('layouts.default')
@section('contenu_gauche')
{{ Form::open(array('url' => '#','class'=>'border-gray frm-etape-tester columns twelve','onsubmit'=>'javascript:procTestEligib(\'contenu gauche\');return false;')) }}
<div class='seven columns'>
    <label class='misc-custom-3'>
       <strong class='left'>SAISISSEZ VOTRE NUM&Eacute;RO DE T&Eacute;L&Eacute;PHONE</strong>
       <span class='right'><a href='#' class='has-tip' data-width='250' title='En saisissant votre numéro de téléphone à dix chiffres, vous pourrez ainsi connaitre l’éligibilité de votre ligne.'>{{ HTML::image('assets/images/info_icon.png', 'Plus info', array('class' => 'border-gray')) }}</a></span>
    </label>
     <div class="row">
        <div class="column three"><?php echo Form::text('ligne_prefix',$value=NULL,$attributes = array('class'=>'validate[required,custom[integer],minSize[4],maxSize[4]]','id'=>'ligne_prefix','maxlength'=>'4'));?> </div>
        <div class="column nine"><?php echo Form::text('ligne_sufix',$value=NULL,$attributes = array('class'=>'validate[required,custom[integer],minSize[6],maxSize[6]]','id'=>'ligne_sufix','maxlength'=>'6')); //echo form_input($ligne_sufix);?></div>
      </div>    
       
</div>
<div class='five columns'>
    <?php echo Form::submit('TESTER',$attributes = array('class'=>'rmv-std-btn btn-green','name'=>'test_eligb_butt','id'=>'test_eligb_butt','title'=>'Tester mon eligibilité'));//echo form_submit($test_eligb_butt);?>
 </div>
{{ Form::close() }}  
   <div>
    <div class='columns six text-right'><strong class='misc-custom-1' >VOUS N'AVEZ PAS DE LIGNE FIXE ?</strong></div>
    <div class='columns six text-left'><a class='btn-service-commercial' href='http://www.mediaserv.com/guadeloupe/souscrire/par-telephone.html' title="Contacter le service commercial">CONTACTER LE SERVICE COMMERCIAL</a></div>
  </div>
@stop