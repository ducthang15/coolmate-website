<?php
namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
// use Illuminate\Notifications\Messages\SlackMessage;
use Illuminate\Notifications\Messages\SlackMessage;



class SlackNotification extends Notification
{
    public $order;

    public function __construct($order)
    {
        $this->order = $order;
    }

    public function via($notifiable)
    {
        return ['slack'];  // Kênh Slack
    }

    public function toSlack($notifiable)
    {
        return (new SlackMessage)
            ->to('#your-channel')  // Đổi thành tên kênh của bạn
            ->content('Bạn có một đơn hàng mới từ ' . $this->order->name)  // Dùng message() nếu có lỗi với content()
            ->attachment(function ($attachment) {
                $attachment->title('Thông tin đơn hàng', url('/order/' . $this->order->id))
                           ->fields([
                               'Sản phẩm' => $this->order->order_detail,
                               'Điện thoại' => $this->order->phone,
                               'Địa chỉ' => $this->order->address,
                           ]);
            });
    }
}




