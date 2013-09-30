<?php
namespace Pi\Oauth\Provider\Storage;

class Client extends AbstractStorage implements ValidateInterface
{
    public function validate($id, $secret)
    {
        return $this->model->validate($id, $secret);
    }

    /**
    * insert new client into database
    */
    public function addClient($param)
    {
        $client = $this->generateClient();
        $record = array_merge($param,$client);

        return $this->model->addClient($record);
    }

    /**
    * get client detail by client_id
    *
    * @param client_id,
    * @return array
    */
    public function getClient($clientid)
    {
        return $this->model->getClient($clientid);
    }

    /**
    * gengerate client id and secret
    * @return array
    */
    protected function generateClient()
    {
        return array(
            'client_id'     => $this->generateCode(),
            'client_secret' => $this->generateCode(),
            'time_create'   => time(),
        );
    }
    /**
    * get client list
    */
    public function getList($condition)
    {
        return $this->model->getList($condition);
    }
}
