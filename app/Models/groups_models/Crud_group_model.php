<?php 

namespace App\Models\groups_models;
use CodeIgniter\Model;

class Crud_group_model extends Model
{
    protected $table = 'groups';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $allowedFields = ['id','name','description','active', 'c_date'];
    protected $useTimestamps = false;

    public function insertNewGroup($data) 
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }


    public function editGroup()
    {
        $model = new Crud_group_model();
        $data = $this->db->table('grupos');

        $data['grupos'] = $model->where('id', $id)->first();
        return view('crud_groups', $data);

    }

} 

 ?>