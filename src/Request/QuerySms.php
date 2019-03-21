<?php
namespace Flc\Dysms\Request;

/**
 * 短信发送API
 *
 * @author Flc <2017-07-18 23:42:12>
 * @link   https://help.aliyun.com/document_detail/55451.html?spm=5176.doc55359.6.555.9caHua
 */
class QuerySms extends ARequest implements IRequest
{
    /**
     * API名称
     * @var string
     */
    protected $action = 'QuerySendDetails';

    /**
     * 设置分页查看发送记录，指定发送记录的的当前页码
     * @param int $value 当前页码
     */
    public function setCurrentPage($value = 1)
    {
        $this->params['CurrentPage'] = $value;

        return $this;
    }

    /**
     * 设置每页显示的短信记录数量
     * @param string $value 每页显示的短信记录数量
     */
    public function setPageSize($value = 10)
    {
        $this->params['PageSize'] = $value;

        return $this;
    }

    /**
     * 设置接收短信的手机号码
     * @param string $value 手机号码
     */
    public function setPhoneNumber($value)
    {
        $this->params['PhoneNumber'] = $value;

        return $this;
    }

    /**
     * 设置短信发送日期 20181228
     * @param string $value 短信发送日期
     */
    public function setSendDate($value)
    {
        $this->params['SendDate'] = $value;

        return $this;
    }

    /**
     * 设置发送回执ID，即发送流水号
     * @param string $value 外部流水扩展字段
     */
    public function setBizId($value)
    {
        $this->params['BizId'] = $value;

        return $this;
    }
}