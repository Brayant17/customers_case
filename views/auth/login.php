<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');

    * {
        /* font-family: "Montserrat", sans-serif; */
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        color: rgba(17, 24, 34, 1);
        font-weight: 500;
    }

    .full-page {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background: #FFF;
    }

    .logo {
        text-align: center;
        font-weight: bold;
        font-size: 1.5rem;
    }

    form {
        gap: 10px;
        min-width: 350px;
        background: #fff;
        padding: 1.5rem;
        display: flex;
        flex-direction: column;
        border-radius: .5rem;
        border: 1px solid;
        border-color: hsl(214, 34%, 91%, 1);
    }

    .form_header {
        text-align: center;
        color: #333;
    }

    .form_header p {
        font-weight: 100 !important;
        color: rgba(107, 114, 128, 1);
    }

    .form_header h2 {
        font-size: 1.25rem;
    }


    .form_group {
        display: flex;
        flex-direction: column;
    }

    .form_group label {
        font-weight: 500;
    }

    .form_group input {
        margin: 5px 0;
        padding: 10px;
        border-radius: 8px;
        border: 1px solid rgba(0, 0, 0, .1);
        outline: none;
    }

    button {
        padding: .8rem 1rem;
        font-size: .875rem;
        line-height: 1.25rem;
        font-weight: 500;
        cursor: pointer;
        border-radius: 8px;
        border: none;
        background-color: #222;
        /* background: hsl(0,0%, 100%); */
        color: #f2f6ff;
        transition: .5s ease;
    }

    button:hover {
        background-color: #267ffe;
        color: #f2f6ff;
    }
</style>
<div class="full-page">
    <div class="logo">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-augmented-reality">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M4 8v-2a2 2 0 0 1 2 -2h2" />
            <path d="M4 16v2a2 2 0 0 0 2 2h2" />
            <path d="M16 4h2a2 2 0 0 1 2 2v2" />
            <path d="M16 20h2a2 2 0 0 0 2 -2v-2" />
            <path d="M12 12.5l4 -2.5" />
            <path d="M8 10l4 2.5v4.5l4 -2.5v-4.5l-4 -2.5z" />
            <path d="M8 10v4.5l4 2.5" />
        </svg>
        <h4>Customer Case</h4>
    </div>
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