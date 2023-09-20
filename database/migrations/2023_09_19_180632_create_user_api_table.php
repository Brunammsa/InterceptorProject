<?php

use Illuminate\Database\Migrations\Migration;
use App\Models\User;
use Ramsey\Uuid\Uuid;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $passwordHashed = password_hash(env('USER_API_PASSWORD'), PASSWORD_BCRYPT);

        $uuid = Uuid::uuid4();

        User::create([
            'provider_id' => null,
            'uuid' => $uuid,
            'name' => 'api',
            'provider' => null,
            'email' => 'api@interceptor.gb',
            'password' => $passwordHashed,
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    }
};
