<?php
class matriculaController
{
    private $model;

    public function __construct()
    {
        include_once($_SERVER['DOCUMENT_ROOT'] . '/semana5/tallermvcphp/routes.php');
        require_once(MODEL_PATH . 'matriculaModel.php');
        $this->model = new matriculaModel();
    }

    public function select()
    {
        $listar = $this->model->listar();
        return $listar ? $listar : $listar;
    }

    public function insert($fecha, $idEstudiante, $idUsuario, $idCurso)
    {
        $id = $this->model->insertar($fecha, $idEstudiante, $idUsuario, $idCurso);
        if ($id != false) {
            header('Location: ./index.php');
        } else {
            header('Location: ./create.php');
        }
    }

    public function update($id, $fecha, $idEstudiante, $idUsuario, $idCurso)
    {
        $result = $this->model->actualizar($id, $fecha, $idEstudiante, $idUsuario, $idCurso);
        if ($result) {
            header('Location: ./index.php');
        } else {
            header('Location: ./edit.php?id=' . $id);
        }
    }

    public function delete($id)
    {
        $result = $this->model->eliminar($id);
        if ($result) {
            header('Location: ./index.php');
        } else {
            header('Location: ./index.php');
        }
    }

    public function search($id)
    {
        $result = $this->model->buscar($id);
        if ($result !== false) {
            return $result;
        } else {
            header('Location: ./index.php');
        }
    }

    public function combolistEstudiantes()
    {
        $result = $this->model->cargarDesplegableEstudiantes();
        return $result ? $result : false;
    }

    public function combolistUsuario($Usuario)
    {
        $result = $this->model->cargarDesplegableUsuario($Usuario);
        return $result ? $result : false;
    }

    public function combolistCursos()
    {
        $result = $this->model->cargarDesplegableCursos();
        return $result ? $result : false;
    }
}
?>