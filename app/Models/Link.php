<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    /** @use HasFactory<\Database\Factories\LinkFactory> */
    use HasFactory;

    protected $fillable = [
        'link',
        'name',
        'sort',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function moveUp()
    {
        $this->move(-1);
    }

    public function moveDown()
    {
        $this->move(1);
    }

    /**
     * Function responsible for reader the link
     *
     * @param  int  $to  +1 for moving down and -1 for moving up
     * @return void
     */
    private function move(int $to)
    {
        $order = $this->sort;
        $newOrder = $order + $to;

        $user = auth()->user();

        $swapWith = $user->links()->where('sort', '=', $newOrder)->first();

        $this->fill(['sort' => $newOrder])->save();
        $swapWith->fill(['sort' => $order])->save();
    }
}
