<?php


namespace App\Models;



use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\ProjectManager
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectManager newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectManager newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectManager query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectManager whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectManager whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectManager whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectManager whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectManager whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectManager whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ProjectManager extends Model
{
    use SoftDeletes;
    protected $fillable = [ 'first_name', 'email', 'last_name' ];
}
