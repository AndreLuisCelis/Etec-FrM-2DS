package etec.com.conversor;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {
EditText valor ;
Button btnck , btnkc , btncf , btnfc , btnkf, btnfk;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        valor = (EditText) findViewById(R.id.edtval);
        btnck = (Button) findViewById(R.id.btnCK);
        btnkc = (Button) findViewById(R.id.btnKC);
        btncf = (Button) findViewById(R.id.btnCF);
        btnfc = (Button) findViewById(R.id.btnFC);
        btnkf = (Button) findViewById(R.id.btnKF);
        btnfk = (Button) findViewById(R.id.btnFK);

        btnck.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                if (valor.getText().toString().isEmpty()) {
                    valor.setError("Preencha o este campo!");
                    valor.requestFocus();
                } else {

                    double v, resultado;

                    v = Double.parseDouble(valor.getText().toString());

                    resultado = v + 273.15;

                    Toast.makeText(MainActivity.this, v + "°C --> " + resultado + "K", Toast.LENGTH_LONG).show();



                }
            }
        });
        btnkc.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                if (valor.getText().toString().isEmpty()){
                    valor.setError("Preencha o este campo!");
                    valor.requestFocus();
                } else {

                    double v, resultado;

                    v = Double.parseDouble(valor.getText().toString());

                    resultado = v - 273.15;

                    Toast.makeText(MainActivity.this, v + "K --> " + resultado + "°C", Toast.LENGTH_LONG).show();
                }
            }
        });

    }
}
