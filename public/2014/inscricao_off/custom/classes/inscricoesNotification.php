<?php

class InscricoesNotification extends Notification {

    public function sendEmailConfirmSubscription($to, $customized_message) {
        $subject = APP_TITLE." - Inscrição";

        $message = "<p>Recebemos seu pedido de inscrição e estamos aguardando seu pagamento.</p>";
        $message .= $customized_message;
        $message .= "<p>Ao confirmar-se seu pagamento, você será notificado.</p>";

        return $this->sendEmail($to, $subject, $message);
    }

    public function sendEmailConfirmPayment($to, $customized_message) {
        $subject = APP_TITLE." - Confirmação de Pagamento";

        $message = "<p>Recebemos a confirmação de seu pagamento.</p>";
        $message .= "<p>Sua inscrição está CONFIRMADA!</p>";

        return $this->sendEmail($to, $subject, $message);
    }

    public function sendEmailCancel($to, $customized_message) {
        $subject = APP_TITLE." - Cancelamento de Inscrição";

        $message = "<p>Sua inscrição foi cancelada pelo seguinte motivo:</p>";
        $message .= $customized_message;

        return $this->sendEmail($to, $subject, $message);
    }
}

?>