<?php

namespace App\Http\Frontend\Controllers;

use App\Http\Controller;
use App\Repositories\Eloquent\InboxRepository as Inbox;
use Illuminate\Http\Request;

class InboxController extends Controller
{

    protected $inbox;

    public function __construct(Inbox $inbox)
    {
        $this->inbox = $inbox;
    }

    /**
     * 获取私信列表
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->inbox->index();
    }

    /**
     * 存储私信内容
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->inbox->store($request);
    }

    /**
     * 存储对话内容
     *
     * @param Request $request
     * @param $dialog
     * @return \Illuminate\Http\JsonResponse|mixed
     */
    public function dialog(Request $request, $dialog)
    {
        return $this->inbox->dialog($request, $dialog);
    }

    /**
     * 获取对话列表
     *
     * @param $dialog
     * @return \Illuminate\Http\Response
     */
    public function show($dialog)
    {
        return $this->inbox->show($dialog);
    }

    /**
     * 删除对话内容
     *
     * @param $dialog
     * @param $id
     * @return \Illuminate\Http\JsonResponse|mixed
     */
    public function delete($dialog, $id)
    {
        return $this->inbox->deleteMessage($dialog, $id);
    }

    /**
     * 删除对话
     *
     * @param $dialog
     * @return \Illuminate\Http\JsonResponse|mixed
     */
    public function destroy($dialog)
    {
        return $this->inbox->destroy($dialog);
    }
}
