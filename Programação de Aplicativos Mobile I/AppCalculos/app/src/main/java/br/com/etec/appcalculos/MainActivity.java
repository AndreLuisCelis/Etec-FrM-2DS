package br.com.etec.appcalculos;
//imports  automaticos
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {

    // 3 criar objetos para associar ao xml

    EditText edN1 , edN2;
    Button btn1, btn2, btn3, btn4;

    //metodo que não deu certo
    public static void checar(EditText edN1,EditText edN2) {

        if (edN1.getText().toString().isEmpty()) {
            edN1.setError("Preencha oo Valor 1");

        } else if (edN2.getText().toString().isEmpty()) {
            edN2.setError("Preencha o valor 2");
        }
    }

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        // 2 Associar os objetos java ao xml

        edN1 = (EditText) findViewById(R.id.edtV1);
        edN2 = (EditText) findViewById(R.id.edtV2);
        btn1 = (Button) findViewById(R.id.btnSoma);
        btn2 = (Button) findViewById(R.id.btnSub);
        btn3 = (Button) findViewById(R.id.btnMulti);
        btn4 = (Button) findViewById(R.id.btnDivi);



        btn1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {//botão somar

                // Verifica se os campos foram preenchidos
                if (edN1.getText().toString().isEmpty()) {
                    edN1.setError("Preencha oo Valor 1");//dispara uma mensagen de erro caso o valor não seja digitado
                    edN1.requestFocus();// coloca o focus no campo onde ocorre o erro

                } else if (edN2.getText().toString().isEmpty()) {// faz a checagem do segundo valor
                    edN2.setError("Preencha o valor 2");
                    edN2.requestFocus();
                } else {
                    // declaração das variaveis auxiliares
                    double v1;
                    double v2;
                    double resultado;


                    //Capturando os valores digitados

                    v1 = Double.parseDouble(edN1.getText().toString());
                    v2 = Double.parseDouble(edN2.getText().toString());

                    //Efetuar o cálculo
                    resultado = v1 + v2;

                    //Exibição do resultado
                    Toast.makeText(MainActivity.this, "A soma é: " + resultado, Toast.LENGTH_LONG).show();


                }
            }
        });

        btn2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {//Botão subtrair repete a logica altera somente o calculo

                if (edN1.getText().toString().isEmpty()) {
                    edN1.setError("Preencha oo Valor 1");
                    edN1.requestFocus();

                } else if (edN2.getText().toString().isEmpty()) {
                    edN2.setError("Preencha o valor 2");
                    edN2.requestFocus();
                } else {


                double v1, v2, resultado;

                v1 = Double.parseDouble(edN1.getText().toString());
                v2 = Double.parseDouble(edN2.getText().toString());

                resultado = v1 - v2;

                Toast.makeText(MainActivity.this, "O resultado é: " + resultado, Toast.LENGTH_LONG).show();
            }
            }
        });

        btn3.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {// botão multiplicar

                if (edN1.getText().toString().isEmpty()) {
                    edN1.setError("Preencha oo Valor 1");
                    edN1.requestFocus();

                } else if (edN2.getText().toString().isEmpty()) {
                    edN2.setError("Preencha o valor 2");
                    edN2.requestFocus();
                } else {


                    double v1, v2, resultado;


                    v1 = Double.parseDouble(edN1.getText().toString());
                    v2 = Double.parseDouble(edN2.getText().toString());

                    resultado = v1 * v2;

                    Toast.makeText(MainActivity.this, "O resultado é: " + resultado, Toast.LENGTH_SHORT).show();
                }
            }
        });

        btn4.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {//botão dividir

                if (edN1.getText().toString().isEmpty()) {
                    edN1.setError("Preencha oo Valor 1");
                    edN1.requestFocus();

                } else if (edN2.getText().toString().isEmpty()) {
                    edN2.setError("Preencha o valor 2");
                    edN2.requestFocus();
                } else {


                    double v1, v2, resultado;

                    v1 = Double.parseDouble(edN1.getText().toString());
                    v2 = Double.parseDouble(edN2.getText().toString());

                    resultado = v1 / v2;

                    Toast.makeText(MainActivity.this, "O resultado é: " + resultado, Toast.LENGTH_SHORT).show();
                }
            }
        });
    }
}
