package licenta.entity;

import lombok.Data;

import javax.persistence.*;
import java.util.List;

@Entity
@Table(name = "elections_table")
@Data
public class Elections {


    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "id")
    private long id;

    @Column(name = "elections_name")
    private String name;

    @ManyToMany()
    List<Candidate> candidates;

    @ManyToMany()
    List<User> users;
}
