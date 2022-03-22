<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Dompdf\Dompdf;

class GerarCurriculo extends Controller
{
    public function Home(){
		return view('home');
	}
	
	public function GerarPdf(Request $request){
		$v_nome = $request->f_nome;
		$v_email = $request->f_email;
		$v_ender = $request->f_ender;
		$v_tel = $request->f_tel;
		$v_objet = $request->f_objet;
		$v_nascionalidade = $request->f_nascionalidade;
		$v_idade = $request->f_idade;
		$v_cnh = $request->f_cnh;
	   	$_empresa1 = $request->f_empre1;
		$_cargo1 = $request->f_carg1;
		$_periodo1 = $request->f_periodo1;
		$_empresa2 = $request->f_empre2;
		$_cargo2 = $request->f_carg2;
		$_periodo2 = $request->f_periodo2;
		$_empresa3 = $request->f_empre3;
		$_cargo3 = $request->f_carg3;
		$_periodo3 = $request->f_periodo3;
		$_curso1 = $request->f_curso1;
		$_curso2 = $request->f_curso2;
		$_curso3 = $request->f_curso3;
		$_curso4 = $request->f_curso4;
		$_curso5 = $request->f_curso5;
		$_curso6 = $request->f_curso6;
		$_escola1 = $request->f_escola1;
		$_escola2 = $request->f_escola2;
		$_escola3 = $request->f_escola3;
		$_escola4 = $request->f_escola4;
		$_escola5 = $request->f_escola5;
		$_escola6 = $request->f_escola6;
	   
		$html = '</br>';
		$dompdf = new DOMPDF();
		$dompdf->load_html('
		<h2> ' .$v_nome. ' </h2>
	   	<p>  ' .$v_nascionalidade.  ' ' .$v_idade.  ' <b> ' .$v_cnh.  ' </b> ' .$v_email.  '  </p>
		<p>  ' .$v_ender.  ' , ' .$v_tel.  ' </p>
	   	<h4> Objetivo: </h4>  
		<p>'.$v_objet.'  </p>
		<hr>
		<h4> Experiências: </h4>
		<p>  Empresa:  '.$_empresa1.'  </p>
		<p>  Cargo:    '.$_cargo1.'    </p>
		<p>  Periodo:  '.$_periodo1.'  </p>   
		<hr>
		<p>  Empresa:  '.$_empresa2.'  </p>
		<p>  Cargo:    '.$_cargo2.'    </p>
		<p>  Periodo:  '.$_periodo2.'  </p>  
		<hr>
		<p>  Empresa:  '.$_empresa3.'  </p>
		<p>  Cargo:    '.$_cargo3.'    </p>
		<p>  Periodo:  '.$_periodo3.'  </p>  
		<hr>  
		<h4>Formação Técnica:  </h4> 
		<p> '.$_curso1.' <b> '.$_escola1.'</b></p>
		<p> '.$_curso2.' <b> '.$_escola2.'</b></p>
		<p> '.$_curso3.' <b> '.$_escola3.'</b></p>
		<p> '.$_curso4.' <b> '.$_escola4.'</b></p>
		<p> '.$_curso5.' <b> '.$_escola5.'</b></p>
		<p> '.$_curso6.' <b> '.$_escola6.'</b></p>
	   
	   ');
	   
		$dompdf->render();
		$dompdf->stream("Curriculo  $v_nome", array("Attachment" => true));
		return view('home');
	}
}

