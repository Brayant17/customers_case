<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');

    * {
        font-family: "Montserrat", sans-serif;
    }

    .full-page {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #f2f6ff;
    }

    form {
        gap: 10px;
        min-width: 400px;
        background: #fff;
        padding: 25px;
        display: flex;
        flex-direction: column;
        border-radius: 8px;
    }

    .form_header {
        text-align: center;
        color: #333;
    }

    .form_group {
        display: flex;
        flex-direction: column;
    }

    .form_group input {
        margin: 5px 0;
        padding: 10px;
        border-radius: 8px;
        border: 1px solid rgba(0, 0, 0, .1);
        outline: none;
    }

    button {
        padding: 13px 20px;
        font-size: 1rem;
        cursor: pointer;
        border-radius: 8px;
        border: none;
        background-color: #333;
        color: #f2f6ff;
        transition: .5s ease;
    }

    button:hover {
        background-color: #267ffe;
        color: #f2f6ff;
    }
</style>
<div class="full-page">
    <form action="http://localhost<?= BASE_PATH ?>/login" method="POST">
        <div class="form_header">
            <h2>Welcome Back</h2>
            <p>Enter your credentials to access your account</p>
            <span>
                <?php if (!empty($_SESSION['error'])): ?>
                    <p style="color:red"><?= $_SESSION['error'] ?></p>
                    <?php unset($_SESSION['error']); ?>
                <?php endif; ?>
            </span>
        </div>
        <div class="form_group">
            <label>Email:</label>
            <input type="email" name="email" required>
        </div>
        <div class="form_group">
            <label>Password:</label>
            <input type="password" name="password" required>
        </div>
        <button type="submit">Iniciar sesión</button>
    </form>
</div>