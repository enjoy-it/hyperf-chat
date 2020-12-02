<?php

namespace App\Constants;

/**
 * WebSocket 消息事件枚举
 *
 * Class SocketConstants
 * @package App\Constants
 */
class SocketConstants
{
    /**
     * 对话消息通知 - 事件名
     */
    const EVENT_TALK = 'event_talk';

    /**
     * 键盘输入事件通知 - 事件名
     */
    const EVENT_KEYBOARD = 'event_keyboard';

    /**
     * 用户在线状态通知 - 事件名
     */
    const EVENT_ONLINE_STATUS = 'event_online_status';

    /**
     * 聊天消息撤销通知 - 事件名
     */
    const EVENT_REVOKE_TALK = 'event_revoke_talk';

    /**
     * 好友申请消息通知 - 事件名
     */
    const EVENT_FRIEND_APPLY = 'event_friend_apply';

    /**
     * WebSocket 消息消费队列交换机名称
     */
    const CONSUMER_MESSAGE_EXCHANGE = 'im.message.fanout';
}
