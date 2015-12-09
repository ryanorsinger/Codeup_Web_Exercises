require_once 'Model.php';

$model = new Model();
$model->name = 'Ryan';
$model->game = 'Parcheesi';
$model->save();


$person = Model::find(1);
$person->game = 'Chess';
$model->save();
