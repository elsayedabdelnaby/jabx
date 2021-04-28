## Change Authentication Password From Hashing to Crypt::decrypt

- Open vendor/laravel/framework/src/Illuminate/Auth/EloquentUserProvider.php.
- Go to validateCredentials function and update it.<br>
public function validateCredentials(UserContract $user, array $credentials)<br>
    {<br>
        $plain = $credentials['password'];<br>
        if ($plain == Crypt::decrypt($user->getAuthPassword())) {<br>
            return true;<br>
        } else {<br>
            return false;<br>
        }<br>
        //return $this->hasher->check($plain, $user->getAuthPassword());<br>
    }<br>
