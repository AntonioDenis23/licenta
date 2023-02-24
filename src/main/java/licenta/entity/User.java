package licenta.entity;


import lombok.Data;

import javax.persistence.*;
import java.util.List;
import java.util.Set;


@Entity
@Table(name = "user_table")
@Data
public class User {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "id")
    private long id;

    @Column(name = "user_name")
    private String userName;

    @Column(name = "password")
    private String password;

    @Column(name = "name")
    private String name;

    @Column(name = "first_name")
    private String firstName;

    @Column(name = "tel")
    private String tel;

    @Column(name = "e_mail")
    private String eMail;

    @ManyToMany
    private Set<Elections> elections;
    public void addElection(Elections elections) {
        this.elections.add(elections);
    }



}
