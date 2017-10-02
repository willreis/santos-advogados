<?php


class Email{

    public $message;
    public $subject;
    public $attachment;
    public $attachmentPath;
    public $to;
    public $from;
    public $name;
    public $cc;

    function setMessage($value){
        $this->message = $value;
    }

    function setSubject($value){
        $this->subject = $value;
    }

    function setAttachment($value){
        $this->attachment = $value;
    }    

    function setFrom($value){
        $this->from = $value;
    }

    function setTo($value){
        $this->to = $value;
    }

    function setName($value){
        $this->name = $value;
    }

    function setReply($value){
        $this->reply = $value;
    }
    function setCc($value){
        $this->cc = $value;
    }

    function send() {      

        $emailsender = "no-replay@" . $_SERVER['HTTP_HOST'];      

        if(PATH_SEPARATOR == ";") $quebra_linha = "\r\n";
        else $quebra_linha = "\n";

        $emaildestinatario = $this->to;
        $mensagemHTML = $this->message;

        $arquivo = isset($this->attachment) ? $this->attachment : FALSE; 

        if(!$arquivo == FALSE){

            $path = $this->attachment;
            $fileType = mime_content_type($path);
            $fileName = basename($path);

            $fp = fopen($path,"rb"); 
            $anexo = fread($fp,filesize($path)); 
            $anexo = base64_encode($anexo);          
            fclose($fp);
            $anexo = chunk_split($anexo);
            $boundary = "XYZ-" . date("dmYis") . "-ZYX";
            $mens = "--$boundary" . $quebra_linha . ""; 
            $mens .= "Content-Transfer-Encoding: 8bits" . $quebra_linha . ""; 
            $mens .= "Content-Type: text/html;charset=utf-8" . $quebra_linha . "" . $quebra_linha . ""; //plain 
            $mens .= "$mensagemHTML" . $quebra_linha . ""; 
            $mens .= "--$boundary" . $quebra_linha . ""; 
            $mens .= "Content-Type: ".$fileType."" . $quebra_linha . ""; 
            $mens .= "Content-Disposition: attachment; filename=\"".$fileName."\"" . $quebra_linha . ""; 
            $mens .= "Content-Transfer-Encoding: base64" . $quebra_linha . "" . $quebra_linha . ""; 
            $mens .= "$anexo" . $quebra_linha . ""; 
            $mens .= "--$boundary--" . $quebra_linha . ""; 

            $headers = "MIME-Version: 1.0" . $quebra_linha . ""; 
            $headers .= "From: $emailsender " . $quebra_linha . ""; 
            $headers .= "Return-Path: $emailsender " . $quebra_linha . ""; 
            $headers .= "Content-type: multipart/mixed; boundary=\"$boundary\"" . $quebra_linha . ""; 
            $headers .= "$boundary" . $quebra_linha . "";

            if(!mail($emaildestinatario, $this->subject, $mens, $headers ,"-r".$emailsender)){ 
                $headers .= "Return-Path: " . $emailsender . $quebra_linha;
                mail($emaildestinatario, $this->subject, $mensagemHTML, $headers );
            }           

        }else{
            $headers = "MIME-Version: 1.1" .$quebra_linha;
            $headers .= "Content-type: text/html; charset=utf-8" .$quebra_linha;
            $headers .= "From: $this->name <" . $emailsender."> ".$quebra_linha;
            $headers .= "Cc: $this->cc " .$quebra_linha;
            $headers .= "Reply-To: $this->reply" .$quebra_linha;
            

            if(!mail($emaildestinatario, $this->subject, $mensagemHTML, $headers ,"-r".$emailsender)){ 
                $headers .= "Return-Path: " . $emailsender . $quebra_linha;
                mail($emaildestinatario, $this->subject, $mensagemHTML, $headers );
            }         
        }
    }
}


?>