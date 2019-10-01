package etec.com.conversor;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {

EditText valor ;//variavel para o valor a ser convertido

Button btnck , btnkc , btncf , btnfc , btnkf, btnfk;// declaração dos botões que vão converter

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        // associando os botões ao views do xml

        valor = (EditText) findViewById(R.id.edtval);// valor que digitado para converter
        btnck = (Button) findViewById(R.id.btnCK);//botão converte valor celsius para kelvin
        btnkc = (Button) findViewById(R.id.btnKC);//////////////////////kalvin para celisius
        btncf = (Button) findViewById(R.id.btnCF);//////////////////////celsius para farenheith
        btnfc = (Button) findViewById(R.id.btnFC);//////////////////////farenheit para celsius
        btnkf = (Button) findViewById(R.id.btnKF);//////////////////////kelvin para farenheint
        btnfk = (Button) findViewById(R.id.btnFK);//////////////////////farenheint para kelvin

        btnck.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {// botão converte celsius para kelvin

                //verificação se o valor foi digitado
                if (valor.getText().toString().isEmpty()) {
                    valor.setError("Preencha o este campo!");
                    valor.requestFocus();
                } else {

                    double v, resultado;

                    v = Double.parseDouble(valor.getText().toString());

                    resultado = v + 273.15;// calculo da conversão

                    Toast.makeText(MainActivity.this, v + " Celsius = " + resultado + " Kelvin ", Toast.LENGTH_LONG).show();



                }
            }
        });
        btnkc.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {// botão converte kelvin para celsius

                if (valor.getText().toString().isEmpty()){
                    valor.setError("Preencha o este campo!");
                    valor.requestFocus();
                } else {

                    double v, resultado;

                    v = Double.parseDouble(valor.getText().toString());

                    resultado = v - 273.15;// calculo da conversão

                    Toast.makeText(MainActivity.this, v + " Kelvin = " + resultado + " Celsius ", Toast.LENGTH_LONG).show();
                }
            }
        });

        btncf.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {// botão converte celsius para fahrenheit

                if (valor.getText().toString().isEmpty()){
                    valor.setError("Preencha o este campo!");
                    valor.requestFocus();
                } else {

                    double v, resultado;

                    v = Double.parseDouble(valor.getText().toString());

                    resultado = (v * 1.8)+32;// calculo da conversão

                    Toast.makeText(MainActivity.this, v + " Celsius  =" + resultado + " fahrenheit ", Toast.LENGTH_LONG).show();
                }
            }
        });

        btnfc.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {// botão converte fahrenheit para celcius

                if (valor.getText().toString().isEmpty()){
                    valor.setError("Preencha o este campo!");
                    valor.requestFocus();
                } else {

                    double v, resultado;

                    v = Double.parseDouble(valor.getText().toString());

                    resultado = (v-32)*0.55555;//calculo da conversão

                    Toast.makeText(MainActivity.this, v + " Fahrenheit  =  " + resultado + " Celsius ", Toast.LENGTH_LONG).show();
                }
            }
        });
        btnkf.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {// botão converte celsius para fahrenheit

                if (valor.getText().toString().isEmpty()){
                    valor.setError("Preencha o este campo!");
                    valor.requestFocus();
                } else {

                    double v, resultado;

                    v = Double.parseDouble(valor.getText().toString());

                    resultado = ((v-273.15)*1.8)+32;//calculo da conversão

                    Toast.makeText(MainActivity.this, v + " kelvin =--> " + resultado + " fahrenheit ", Toast.LENGTH_LONG).show();
                }
            }
        });

        btnfk.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {// botão converte celsius para fahrenheit

                if (valor.getText().toString().isEmpty()){
                    valor.setError("Preencha o este campo!");
                    valor.requestFocus();
                } else {

                    double v, resultado;

                    v = Double.parseDouble(valor.getText().toString());

                    resultado = ((v-32)*0.55555)+273.15;// calculo da conversão

                    Toast.makeText(MainActivity.this, v + " fahrenheits =--> " + resultado + " Kelvin ", Toast.LENGTH_LONG).show();
                }
            }
        });


    }
}
